<div data-previous-operand class="previous-operand"></div>
    <div data-current-operand class="current-operand"></div>
<button data-all-clear class="span-two">AC</button>
  <button data-delete>DEL</button>
  <button data-operation>÷</button>
  <button data-number>1</button>
  <button data-number>2</button>
  <button data-number>3</button>
  <button data-operation>*</button>
  <button data-number>4</button>
  <button data-number>5</button>
  <button data-number>6</button>
  <button data-operation>+</button>
  <button data-number>7</button>
  <button data-number>8</button>
  <button data-number>9</button>
  <button data-operation>-</button>
  <button data-number>.</button>
  <button data-number>0</button>
  <button data-equals class="span-two">=</button>
  </div>

const numberButtons = document.querySelectorAll('[data-number]')
const operationButtons = document.querySelectorAll('[data-operation]')
const equalsButton = document.querySelector('[data-equals]')
const deleteButton = document.querySelector('[data-delete]')
const allClearButton = document.querySelector('[data-all-clear]')
const previousOperandTextElement = document.querySelector('[data-previous-operand]')
const currentOperandTextElement = document.querySelector('[data-current-operand]')
class Calculator {
  constructor(previousOperandTextElement, currentOperandTextElement) {
    this.previousOperandTextElement = previousOperandTextElement
    this.currentOperandTextElement = currentOperandTextElement
    this.clear()
}
clear() {
    this.currentOperand = ''
    this.previousOperand = ''
    this.operation = undefined
}

delete() {
  this.currentOperand = this.currentOperand.toString().slice(0, -1)
}

appendNumber(number) {
  if (number === '.' && this.currentOperand.includes('.')) return
    this.currentOperand = this.currentOperand.toString() + number.toString()
}

chooseOperation(operation) {
  if (this.currentOperand === '') return
    if (this.previousOperand !== '') {
      this.compute()
    }
    this.operation = operation
    this.previousOperand = this.currentOperand
    this.currentOperand = ''
}

compute() {
   let computation
    const prev = parseFloat(this.previousOperand)
    const current = parseFloat(this.currentOperand)
    if (isNaN(prev) || isNaN(current)) return
    switch (this.operation)
     {
      case '+':
        computation = prev + current
        break
      case '-':
        computation = prev - current
        break
      case '*':
        computation = prev * current
        break
      case '÷':
        computation = prev / current
        break
      default:
        return
      }
    this.currentOperand = computation
    this.operation = undefined
    this.previousOperand = ''
  }

updateDisplay() {
    if (this.operation != null) {
      this.previousOperandTextElement.innerText =
        `${this.getDisplayNumber(this.previousOperand)} ${this.operation}`
}
