<div class="alert alert-success alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>

  <div ng-hide="smartSearchSaved">
    <a href="#" ng-click="test()" class="alert-link">Activate Smart Search - Send Me an Alert</a> when mowers are added that fit this search.
  </div>

  <div ng-show="smartSearchSaved">
    <strong>Your Smart Search was Saved Successfully</strong>
  </div>

</div>