
function selectBrand() {
    var brandId = document.getElementById('brand').value;
    loadModelsByBrandId(brandId)
        .then(updateSelect('model'))
        .then(disableElement('year'))
        .then(disableElement('load-colors'))
        .then(undisableElement('model'));
}


function selectModel() {
    var brand = document.getElementById('brand').value;
    var model = document.getElementById('model').value;
    loadYearsByModelId(model)
        .then(updateSelect('year'))
        .then(undisableElement('year'))
        .then(disableElement('load-colors'));
}


function loadColors() {
    var type = window.localStorage.getItem('colorType');
    var yearId = document.getElementById('year').value;
    var modelId = document.getElementById('model').value;
    var brandId = document.getElementById('brand').value;
    window.location.href = '/color/year/' + yearId + '/model/' + modelId + '/brand/' + brandId + '/type/' + type;
}

var color = 0;
function setColorId(element){
    var checked = element.checked;
    if(checked){
        color = element.value;
    }else{
        color = 0;
    }
}

function goToFeedback(){
    if(color == 0){
        var error = document.getElementById('color-error');
        error.style.display = 'inline';
        return false;
    }
    window.location.href = '/feedback/color/' + color;
}

function updateSelect(selectId) {
    var select = document.getElementById(selectId);
    return function (response) {
        var options = '<option value="0">'+selectId.charAt(0).toUpperCase() + selectId.slice(1)+'</option>';
        for(var i in response){
            var title = response[i][selectId];
            options += '<option value="'+response[i].id+'">'+title+'</option>';
        }
        select.innerHTML = options;
    }
}
function undisableElement(selectId) {
    var select = document.getElementById(selectId);
    return select.disabled = false;
}
function disableElement(selectId) {
    var select = document.getElementById(selectId);
    return select.disabled = true;
}