let fechaHora = document.querySelectorAll('.fechaHora');
let celdaNumero = document.querySelectorAll('.data__celda-numero');
let img = document.querySelector('#img-importante');

fetch('https://api.covid19api.com/summary')
.then(resp => resp.json())
.then(pais => {
    // console.log(pais);
    let mex = pais.Countries.find(Country=>Country.Country === 'Mexico');
    // console.log(mex);
    fechaHora[0].innerHTML = mex.Date;

    celdaNumero[0].innerHTML = mex.NewConfirmed;
    celdaNumero[1].innerHTML = mex.NewDeaths;
    celdaNumero[2].innerHTML = mex.NewRecovered;

    celdaNumero[3].innerHTML = mex.TotalConfirmed;
    celdaNumero[4].innerHTML = mex.TotalDeaths;
    celdaNumero[5].innerHTML = mex.TotalRecovered;
    // console.log(pais.Global);
    celdaNumero[6].innerHTML = pais.Global.NewConfirmed;
    celdaNumero[7].innerHTML = pais.Global.NewDeaths;
    celdaNumero[8].innerHTML = pais.Global.NewRecovered;

    celdaNumero[9].innerHTML = pais.Global.TotalConfirmed;
    celdaNumero[10].innerHTML = pais.Global.TotalDeaths;
    celdaNumero[11].innerHTML = pais.Global.TotalRecovered;

    document.querySelector('#countri').innerHTML += mex.CountryCode;
})
.catch(error => {
    console.log(error);
});

fetch('img/cov.jpg')
    .then( resp => resp.blob() )
    .then( imagen => {
        var imgPath = URL.createObjectURL( imagen );
        img.src = imgPath;
    });