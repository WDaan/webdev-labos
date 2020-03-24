function bereken(){
    const r = document.getElementById('weerstand').value
    const i = document.getElementById('stroom').value
    const res = r * i * i;
    if(isNaN(res)){
        return document.getElementById('response').innerHTML = 'Error: Invalid input'
    }
    document.getElementById('response').innerHTML = `${res} W`
}