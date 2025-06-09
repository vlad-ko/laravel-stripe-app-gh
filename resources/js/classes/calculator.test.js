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

test('division by zero returns Infinity', () => {
  const calculator = new Calculator();
  expect(calculator.divide(8, 0)).toBe(Infinity);
});

test('calculates 2 to the power of 3', () => {
  const calculator = new Calculator();
  expect(calculator.power(2, 3)).toBe(8);
});

test('handles negative exponents', () => {
  const calculator = new Calculator();
  expect(calculator.power(2, -1)).toBe(0.5);
});

test('power with NaN input returns NaN', () => {
  const calculator = new Calculator();
  expect(calculator.power(NaN, 2)).toBe(NaN);
});

test('adds 0 + 0 to equal 0', () => {
  const calculator = new Calculator();
  expect(calculator.add(0, 0)).toBe(0);
});
