let merge = (left, right) => {
  let sorted = []
  while (left.length || right.length) {
    if (!left.length) {
      let r = right.shift()
      sorted.push(r)
      continue
    }
    if (!right.length) {
      let l = left.shift()
      sorted.push(l)
      continue
    }
    let r = right.shift()
    let l = left.shift()
    if (l < r) {
      sorted.push(l)
      right.unshift(r)
    } else {
      sorted.push(r)
      left.unshift(l)
    }
  }
  return sorted
}
let msort = (a) => {
  let len = a.length
  if (len <= 1) {
    return a
  }
  let midLen = Math.floor(len/2)

  let left = a.splice(0, midLen)
  let right = a

  left = msort(left)
  right = msort(right)
  return merge(left, right)
}

msort([2,4,2,6,3,2,1])
