const checkUsername = (username) => {
  return /^x{1}[A-Z]{4,7}x{1}$/.test(username);
}
const checkPassword = (password) => {
  return /(?=.*[A-Z]{3})(?=.*[@#$%^&+!=])(?=.*[a-z])(?=.*[0-9])/g.test(password);
}

console.log(checkUsername('xFATHURx'));
console.log(checkUsername('xRidhox'));
console.log(checkPassword('kick2XXX!'));
console.log(checkPassword('aV8V7V6?'));
