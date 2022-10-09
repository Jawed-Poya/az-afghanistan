function fetchCountriesInfo(path, type, location) {
    fetch(path).then(res => {
        return res.json();
    }).then(data => {
        let output = '';
        data.forEach(country => {
            output += `<option>${country.code} ${country.dial_code}</option>`;
        })
        console.log(location)
        location.innerHTML += output;
    }).then(err => {
        return err;
    })
}
