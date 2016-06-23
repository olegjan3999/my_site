function get(url, data, callback) {
    return new Promise(function (resolve, reject) {
            $.ajax({
                url: url,
                data: data,
                success: callback,
                dataType: 'json'
            })
            .then(function (result) {
                resolve(result)
            }, function (error) {
                reject();
            });
    });
}