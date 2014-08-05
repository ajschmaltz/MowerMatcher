var app = angular.module('mowerMatcherApp', ['flow', 'unsavedChanges', 'ngGeolocation', 'google-maps'])
.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})
.config(function($locationProvider) {
    $locationProvider.html5Mode(true);
})
.controller( 'postImageController', function postImageController ( $scope, $http, $geolocation, $log ) {

    $scope.$on('flow::fileSuccess', function (event, $flow, flowFile, message) {
        flowFile.uid = angular.fromJson(message).id;
        $scope.disableForm = false;
    });

    $scope.$on('flow::uploadStart', function () {
        $scope.disableForm = true;
    });

    $scope.$on('flow::fileError', function (event, $flow, flowFile, message) {
       flowFile.cancel();
       $scope.disableForm = false;
    });

        $geolocation.getCurrentPosition().then(function(data) {
            $scope.map.center = data.coords;
            $scope.marker = {
                id:0,
                coords: data.coords,
                options: { draggable: true },
                events: {
                    dragend: function (marker, eventName, args) {
                        $log.log('marker dragend');
                        $log.log(marker.getPosition().lat());
                        $log.log(marker.getPosition().lng());
                    }
                }
            };
        });



        $scope.map = {center: {latitude: 40.1451, longitude: -99.6680 }, zoom: 14 };
        $scope.options = {scrollwheel: false};


})
.controller( 'filterMowers', function filterMowers ( $scope, $http, $location ) {

    $scope.test = function(){
        $http.post('/filters', null, {'params': $location.search()})
        .success(function() {
           $scope.smartSearchSaved = true;
        });
    }

})
.directive('imageField', function() {
    return {
        template: '<img flow-img="file"/>' +
            '<input type="hidden" name="imageIds[]" value="[[ file.uid ]]" />' +
            '<div class="progress">' +
            '<div class="progress-bar" role="progressbar" aria-valuenow="[[ file.progress() * 100 ]]" aria-valuemin="0" aria-valuemax="100" style="width: [[ file.progress() * 100 ]]%;">' +
            '<span class="sr-only">[[ file.progress() * 100 ]] Complete</span>' +
            '</div>' +
            '</div>'
    };
});