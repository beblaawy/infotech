function display_success(scope,obj,msg ='',clear=false,btn='btn'){
  scope[obj].failed  = false;
  scope[obj].success = true;
  scope[obj].success_msg = msg;
  scope[obj][btn] = false;
  clear?clear_form(scope[obj]):'';
}
function display_errors(res,scope,obj,btn='btn'){
  if (res.status == 422 ||res.status==423) {
    scope[obj].failed  = true;
    scope[obj].success = false;
    scope[obj].errors  = res.data;
  }
  scope[obj][btn] = false;
}
function clear_form(scope,name='form'){
  scope.data = {};
  scope[name].$setPristine();
  scope[name].$setUntouched();
}
function if_have_password(scope,tar){
  if (scope[tar].data.password){
    scope[tar].data.password='';
    scope[tar].data.password_confirmation='';
    scope[tar].form.$setPristine();
    scope[tar].form.$setUntouched();
  }
}
function go_to(x='/',time=1500){
  setTimeout(function(){
    window.location.href = x;
  }, time);
}
function refresh(location){
  location.path();
  setTimeout(function(){
    window.location.reload();
  }, 800);
}
function initiation(res, scope, loading = false, channel = false){
  if (res.status == 200) {
    angular.forEach(res.data,function(v,k) {
      if (angular.isObject(v)) {
        if (scope.hasOwnProperty(k)){
          angular.forEach(v,function(x,y) {
            scope[k][y]=x;
          });
        }else{
          scope[k]=v;
        }
      }else{
        scope[k]=v;
      }
    });
  }
  scope.loading_icon=loading;
}
function is_empty_obj(obj) {
  if (typeof obj == "object"){
    for (var k in obj) {
        if (hasOwnProperty.call(obj,k)) return false;
    }
  };
  return true;
}
function get_object_keys(obj){
  var keys = [];
  for(var key in obj){keys.push(key);}
  return keys;
}
function ang_route(x){
  return x.substring(1,6)=='admin'?x=x.substring(0,6)+'/ang'+x.substring(6,x.length):x='/ang'+x;
}


function pag_params(scope,location,pagName=false){
    var x=scope.route,y,obj,arr,id;
    pag=pagName?(scope.hasOwnProperty(pagName)?scope[pagName].pag:{}):{};
    /*var y=abs.search(x);
    if(y==-1){return '';}
    var le=y+x.length+1;
    id.length==15&&id.search('/admin')==-1?'':id='';
    return is_valid(id)?id:'';
    }
  }*/

  obj=!is_empty_obj(pag)?pag:(!is_empty_obj(location.search())?location.search():false);
  //arr = ['q','amount','page','utype','method','comment'];
  arr = ['q','amount','page','utype','method','comment','image','country','date','col','col_v'];
  if (obj) {
    var str='',i=1,amp='';
    angular.forEach(obj,function(v,k) {
      amp=i==1?'':'&';
      arr.indexOf(k)!==-1&&v!==null?str+=amp+k+'='+v:'';
      i++;
    });
    return '?'+str;
  }
  return false;
}
function is_valid(str){
   return !/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
}
function loading_icon(scope, loading = false){  
  scope.loading_icon = loading;
}
function ucfirst(arr=[]){
  var x,i=0,res='';
  for (i=0; i < arr.length; i++) {
    x=arr[i];
    if (typeof x!=='undefined'&&x!==null){res+=x.charAt(0).toUpperCase()+x.slice(1)+' '};
  }
  return res;
}

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  //$('.animate-me').addClass('ng-cloak');
})
function sc_width(param, width){
  return window.matchMedia('('+param+'-width: '+width+'px)').matches;
}
function rand_str(x = 18){
  var text = "K";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for( var i=0; i < x; i++ ){
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
}
function rand_num(x = 5){
  var text = "";
  var possible = "0123456789";
  for( var i=0; i < x; i++ ){
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
}
function jQMsg(msg, timeout = "2000", speed = "slow"){
    var place = "#jQMsg";
    $( place ).text( msg );
    $( place ).show().delay( timeout ).fadeOut( speed );
}
function ch_num(x){
  return typeof x=='number'?x:parseInt(x);
}
function ch_obj(x){
  if (typeof x !== 'object' && typeof x !== 'undefined') {
    return JSON.parse(x);
  }else{
    return x;
  }
}
function arr_data(res, scope, target){
  if (res.status == 200) {
      var x = ch_obj(res.data[target]);
      scope[target]=[];
      for (var i = 0; i < x.length; i++) {
          scope[target].push(x[i]);
      }
  }else{
      console.log(res);
  }
}
function obj_data(scope, target){
  scope[target] = {};
  if (typeof params !== 'undefined' && typeof params == 'object') {
    angular.forEach(params, function(v, k) {
      scope[target][k] = v;
    });
  }
}
App.factory('httpRequestInterceptor', function () {
  return {
    request: function (config) {
       config.headers['Authorization'] = 'authentication';
       config.headers['X-Requested-With'] = 'XMLHttpRequest';
      return config;
    }
  };
}).config(['$provide', '$httpProvider','$routeProvider','$locationProvider',function($provide, $httpProvider, $routeProvider,$locationProvider) {
  $httpProvider.interceptors.push('httpRequestInterceptor');
  $provide.decorator('$templateRequest', ['$http', '$templateCache', '$q', '$delegate',
  function($http, $templateCache, $q, $delegate) {
    return function(templateUrl) {
      var tpl = $templateCache.get(templateUrl);
      if (tpl === undefined) {
        if ( false ) {
          return $delegate(templateUrl);
        }
        return $http.post(templateUrl).then(function(res){
          var result = res.data;
          $templateCache.put(templateUrl, result);
          return result;
        });
      } else {
        return $q.resolve(tpl);
      }
    };
  }]);
  $locationProvider.html5Mode({enabled: true, requireBase: false});
}]).directive('tooltip', function(){
  return {
    restrict: 'A',
    link: function(scope, element, attrs){
        $(element).hover(function(){
        // on mouseenter
        $(element).tooltip('show');
      }, function(){
        // on mouseleave
        $(element).tooltip('hide');
      });
    }
  };
});