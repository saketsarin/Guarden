$(document).ready(function () {
  var multipleCancelButton = new Choices("#choices-multiple-remove-button", {
    removeItemButton: true,
    maxItemCount: 5,
    searchResultLimit: 5,
    renderChoiceLimit: 5,
  });
});


var field = 1; //inital number of field in form

function new_field() {

  field++;
  var objTo = document.getElementById('insert_field');
  var divtest = document.createElement('div');
  divtest.setAttribute('class', 'form-group removeclass' + field);
  var rdiv = 'removeclass' + field;
  divtest.innerHTML = ` <div class="form-group">
  <div class="input-group">
    <select class="form-control" id="form">
      <option value="Appliance">Appliance</option>
      <option value="Refrigerator">Refrigerator</option>
      <option value="AC">AC</option>
      <option value="Vehicle">Vehicle</option>
    </select>
    </div>
  </div>

  <div class="nopadding">
      <div class="form-group">
        <input type="number" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Hours Used">
      </div>
    </div>
    
    <div class="input-group-btn">
      <button class="btn btn-danger" type="button"  onclick="remove_field(${field});"><i class="fa fa-minus" aria-hidden="true" style="margin: 13px;"></i></button>
    </div>`

  objTo.appendChild(divtest)
}

function remove_field (rid) {
  $('.removeclass' + rid).remove();
}