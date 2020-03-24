function slider() {
  let slider = document.getElementById("slider")
  document.getElementById("sliderValue").innerHTML = slider.value
}

function confirmation(){
    const res = confirm('Are you sure?')
    const el = document.getElementById('confirmResponse')
    res ? el.innerHTML = "ja" : el.innerHTML = "nee"
}

function prompting(){
    const res = prompt('What\'s your name?')
    const el = document.getElementById('promptResponse')
    res ? el.innerHTML = `Hello ${res}!` : el.innerHTML = "No input given"
}

function writeline(){
    document.writeln('I wrote something...')
}
