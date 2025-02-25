// FILE: resources/js/calculator.test.js

const Calculator = require('./calculator');

test('adds 1 + 2 to equal 3', () => {
  const calculator = new Calculator();
  expect(calculator.add(1, 2)).toBe(3);
});

test('subtracts 5 - 2 to equal 3', () => {
  const calculator = new Calculator();
  expect(calculator.subtract(5, 2)).toBe(3);
});

test('multiplies 3 * 4 to equal 12', () => {
  const calculator = new Calculator();
  expect(calculator.multiply(3, 4)).toBe(12);
});

test('divides 8 / 2 to equal 4', () => {
  const calculator = new Calculator();
  expect(calculator.divide(8, 2)).toBe(4);
});
