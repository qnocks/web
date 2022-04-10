const M = 3;
const N = 5;
let nums = Array.from(Array(M), () => new Array(N))

let k = 1;
let f = M * N;

for (let i = 0; i < M; i++) {
    if (i % 2 == 0) {
        for (let j = 0; j < N; j++) {
            nums[i][j] = k++;
        }
    } else {
        f = k + N;
        for (let j = 0; j < N; j++) {
            nums[i][j] = --f;
            k++;
        }
    }
}

console.log(nums);
let prettyNums = JSON.stringify(nums)
prettyNums = prettyNums;
