const randomize = (word) => {
  if (typeof word == typeof "") {
    const len = word.length;
    let random1 = Math.floor(Math.random() * len);
    let random2 = Math.floor(Math.random() * len);
    while (random1 == random2) {
      random2 = Math.floor(Math.random() * len);
    }
    let splitWord = word.split('');
    let tmp = '';
    tmp = splitWord[random1];
    splitWord[random1] = splitWord[random2];
    splitWord[random2] = tmp;
    return splitWord.join('');
  }
  else
    return "incorrect input type. input type must be a string.";
}

console.log(randomize(123));