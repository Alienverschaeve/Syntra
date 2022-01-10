
function protect_email(email) {
  let maskedEmail = "";
  // const eersteDeel = email.substring(0,email.indexOf("@"))
  // const tweedeDeel = email.substring(email.indexOf("@"))
  const delen = email.split("@");
  const aantalTeNemenKarakters = Math.floor(delen[0].length / 2); //robin_singh
  const eersteDeel = delen[0].substr(0, aantalTeNemenKarakters);
  maskedEmail = eersteDeel + "...@" + delen[1];
  return maskedEmail;
