getClock = ->
  d = undefined
  nhour = undefined
  nmin = undefined
  nsec = undefined
  d = new Date
  nhour = d.getHours()
  nmin = d.getMinutes()
  nsec = d.getSeconds()
  if nmin <= 9
    nmin = '0' + nmin
  if nsec <= 9
    nsec = '0' + nsec
  document.getElementById('clock').innerHTML = '' + nhour + ':' + nmin + ':' + nsec + ''
  return

window.onload = ->
  getClock()
  setInterval getClock, 1000
  return

getYear = ->
  date = new Date()
  document.getElementById('year').innerHTML = date.getFullYear()
  return