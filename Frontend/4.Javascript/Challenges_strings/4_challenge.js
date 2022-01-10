string_cut = function (str, size) {
  if (str == null) return [];
  str = String(str);
  size = ~~size;
  return size > 0 ? str.match(new RegExp(".{1," + size + "}", "g")) : [str];
};
console.log(string_cut("check"));
console.log(string_cut("check", 2));
console.log(string_cut("check", 3));
