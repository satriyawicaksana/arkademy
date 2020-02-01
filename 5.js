const printSquare = (num) => {
  let res = [];
  for (i = 0; i < num; i++) {
    if (i == 0 || i == num - 1) {
      for (j = 0; j < num; j++) {
        res.push('*');
      }
      console.log(res.join('  '));
      res = [];
    }
    else {
      for (j = 0; j < num; j++) {
        if (j == 0 || j == num - 1)
          res.push('*');
        else
          res.push(' ');
      }
      console.log(res.join('  '));
      res = [];
    }
  }
}
printSquare(2);
printSquare(4);
printSquare(7);