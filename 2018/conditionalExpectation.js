let getRandomInt = (max) => Math.ceil(Math.random() * Math.floor(max))
let recurse = () => {
    let x = getRandomInt(3)
    if (x == 1) return 3
    if (x == 2) return 5 + recurse()
    return 7 + recurse()
}
let experiment = (n, result) => {
    for (i = 0; i < n; i++) {
        let rv = recurse()
        if (result[rv] == undefined) {
            result[rv] = 1
        } else {
            result[rv]++
        }
    }
}
let getExpectation = (r) => {
	let total = 0
  let num = 0
  for (let k in r) {
    total += r[k] * k
    num += r[k]
  }
  return total/num
}

let doExperiment = (t) => {
  let N = 100000000
  for (var i = 0; i < t; i++) {
    let r = []
    experiment(N, r)
    console.log(getExpectation(r))
  };
}

doExperiment(5)
