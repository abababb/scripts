let test_len = 5
let test_set = ['a', 'b', 'c']

let induce = (result, arr_set) => {
  let new_result = []
  for (str in result) {
    for (i in arr_set) {
      new_result.push(result[str] + arr_set[i])
    }
  }
  return new_result
}

let recurse = (len, set) => {
  if (len == 1) return set
  return induce(recurse(len - 1, set), set)
}

let test = recurse(test_len, test_set)
console.log(test)
