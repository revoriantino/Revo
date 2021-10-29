angular.module('admin.services',[])
.factory("tahapanServices", tahapanServices);

function tahapanServices($http, $q, helperServices) {
    var controller = helperServices.url + 'tahapan/';
    var service = {}
    service.data = [];
    return {
        get:get, post:post, put:put, deleted:deleted
    }

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/read",
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function post(param) {
        var def = $q.defer();
        $http({
            method: 'post',
            url: controller + "/post",
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data.push(res,data);
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function put(param) {
        var def = $q.defer();
        $http({
            method: 'put',
            url: controller + "/put/"+param.id,
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function deleted(param) {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/delete/"+param.id,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
}