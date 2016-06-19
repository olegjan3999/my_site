function loadModelsByBrandId(brandId) {
    return get('/model/' + brandId, []);
}

function loadYearsByModelId(modelId) {
    return get('/year/' + modelId, []);
}

function loadByBrandAndModelAndYear(brand, model, year) {
    return get('/brand/' + brand + '/model/' + model + '/year/' + year, []);
}