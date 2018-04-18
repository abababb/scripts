let nameDiamond = function (str) {
  let width = str.length
  let height = width * 2 - 1
  Array(height).fill().map((i, k) => {
    if (k < width) {
      console.log(str.substr(0, k + 1).padEnd(width))
    } else {
      console.log(str.substr(k + 1 - width).padStart(width))
    }
  })
}
nameDiamond('adfadsfads')
