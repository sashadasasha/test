const beetlesDistribution = (stones, beetles) => {
  let road = [stones];
  let leftRoad, rightRoad, stoneEmpty;
  for (let i = beetles; i > 0; i--) {
    stoneEmpty = road.shift();
    stoneEmpty--;
    rightRoad = Math.floor(stoneEmpty / 2);
    leftRoad = Math.ceil(stoneEmpty / 2);
    road.push(leftRoad, rightRoad);
  }
  return `stones quantity = ${stones}\nbeetles quantity = ${beetles}\nleftRoad = ${leftRoad}\nrightRoad = ${rightRoad}`;
}


console.log(beetlesDistribution(8, 1));
console.log(beetlesDistribution(8, 2));
console.log(beetlesDistribution(8, 3));