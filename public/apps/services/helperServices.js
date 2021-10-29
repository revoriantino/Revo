angular.module("helper.service", [])
.factory("helperServices", helperServices);

function helperServices($location) {
    var service = { IsBusy: false};
    service.url = $location.$$protocol + '://' + $location.$$host;
    if($location.$$port){
        service.url = service.url + ':' + $location.$$port + '/';
    }
    
    return service;
}