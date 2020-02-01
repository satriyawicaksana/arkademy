const substituteVowels = (sentence, newVowel) => {
  if (/[aiueoAIUEO]/g.test(sentence))
    return sentence.replace(/[aiueoAIUEO]/g, newVowel);
  else
    return "No vowels exist!";
}
console.log(substituteVowels("Orang jahat adalah orang baik yang tersakiti", "i"));
console.log(substituteVowels("try fly fry cry", "x"));