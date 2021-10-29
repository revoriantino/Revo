angular.module("admin.controllers", [])
.controller("tahapanController", tahapanController);

function tahapanController($scope, tahapanServices) {
    $scope.datas = [];
    tahapanServices.get().then(res=>{
        $scope.datas = res;
        console.log(res);
    })
}