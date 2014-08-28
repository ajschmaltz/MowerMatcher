<div class="btn-group" ng-controller="mowerAdminFunctionsController">
  <button type="button" class="btn btn-default" ng-click="markSold({{ $mower->id }})"><span class="glyphicon glyphicon-ok"></span> Mark as Sold</button>
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button>
</div>