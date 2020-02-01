const checkUsername = (username) => {
  return /^x{1}[A-Z]{4,7}x{1}$/.test(username);
}
const checkPassword = (password) => {
  // NOT FINISHED YET
}

console.log(checkUsername('xHOHOASDFx'));
console.log(checkUsername('xHOHOASFx'));