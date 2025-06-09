const Calculator = require('./calculator');

describe('Calculator', () => {
  let calculator;

  beforeEach(() => {
    calculator = new Calculator();
  });

  describe('add method', () => {
    it('should add two numbers correctly', () => {
      expect(calculator.add(2, 3)).toBe(5);
    });
  });

  describe('subtract method', () => {
    it('should subtract two numbers correctly', () => {
      expect(calculator.subtract(5, 2)).toBe(3);
    });
  });

  describe('multiply method', () => {
    it('should multiply two numbers correctly', () => {
      expect(calculator.multiply(3, 4)).toBe(12);
    });
  });

  describe('divide method', () => {
    it('should divide two numbers correctly', () => {
      expect(calculator.divide(10, 2)).toBe(5);
    });
  });

  describe('squareRoot method', () => {
    it('should calculate square root correctly', () => {
      expect(calculator.squareRoot(16)).toBe(4);
    });
  });

  describe('absolute method', () => {
    it('should return the same value for positive numbers', () => {
      expect(calculator.absolute(5)).toBe(5);
    });
    it('should return the positive value for negative numbers', () => {
      expect(calculator.absolute(-5)).toBe(5);
    });
    it('should return 0 for 0', () => {
      expect(calculator.absolute(0)).toBe(0);
    });
  });

  describe('factorial method', () => {
    it('should calculate factorial correctly for positive integers', () => {
      expect(calculator.factorial(5)).toBe(120);
      expect(calculator.factorial(3)).toBe(6);
    });
    it('should return 1 for inputs of 0 and 1', () => {
      expect(calculator.factorial(0)).toBe(1);
      expect(calculator.factorial(1)).toBe(1);
    });
    it('should return NaN for negative inputs', () => {
      expect(isNaN(calculator.factorial(-5))).toBe(true);
    });
  });
});