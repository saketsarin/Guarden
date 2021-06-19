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
  divtest.innerHTML = ` <div class="item" style="display: flex;">
  <div class="appliance">
      <select class="form-select" id="choices-multiple-remove-button" multiple required>
          <option value="fridge">Refrigerator</option>
          <option value="ac">Air Conditioner</option>
          <option value="tv">Vehicle</option>
      </select>
  </div>

  <div class="amount_used">
      <input class="form-control" type="number" name="time"
          placeholder="Total time used (in hours)" required>
  </div>
  <button class="btn btn-danger" type="button" onclick="new_field();"><i class="fa fa-minus" aria-hidden="true" style="margin: 13px;"></i></button>
</div> `

  objTo.appendChild(divtest)
}

function remove_field (rid) {
  $('.removeclass' + rid).remove();
}