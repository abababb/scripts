function collatz (n) {let count = 0; while (n != 1) {if (n % 2) {n = 3 * n + 1} else {n = n / 2} count++} return count}
Promise.all(
  Array(1000000).fill().map((i, k) => k + 1).map(i => new Promise((resolve, reject) => resolve(collatz(i))))
).then(
  result => {
    let res = result.reduce(
      (acc,cur,key) => {
        if (acc[cur] === undefined) {
          acc[cur] = []
        }
        acc[cur].push(key + 1);
        return acc
      }
      , {}
    );
    console.log(res)
  }
)
