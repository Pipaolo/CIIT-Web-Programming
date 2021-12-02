
const createStore = (reducer) => {
    let listeners = [];
    let currentState = reducer(undefined, {});

    return {
        getState: () => currentState,
        dispatch: (action) => {
            currentState = reducer(currentState, action);
            listeners.forEach((listener) => {
                listener();
            });
        },
        subscribe: (listener) => {
            listeners.push(listener);
            const unsubscribe = () => {
                listeners = listeners.filter((l) => l !== listener);
            };
            return unsubscribe;
        },
    };
};

const initialState = {
    firstNumber: 0,
    secondNumber: 0,
    operation: '',
    error: null,
    success: false,
    result: 0,
};

const actions = {

    calculate: (operation, firstNumber, secondNumber) => ({
        type: 'CALCULATE',
        payload: {
            operation,
            firstNumber,
            secondNumber,
        },
    })
};

const calculatorReducer = (state = initialState, action) => {
    switch (action.type) {
        case 'CALCULATE':
            try {
                const { operation, firstNumber, secondNumber } = action.payload;
                let result = 0;
                switch (operation) {
                    case '+':
                        result = firstNumber + secondNumber;
                        break;
                    case '-':
                        result = firstNumber - secondNumber;
                        break;
                    case '*':
                        result = firstNumber * secondNumber;
                        break;
                    case '/':
                        if (secondNumber === 0) {
                            throw new Error('Zero cannot be used as a divisor.');
                        }
                        result = firstNumber / secondNumber;
                        break;
                }
                return {
                    ...state,
                    success: true,
                    error: null,
                    operation,
                    firstNumber,
                    secondNumber,
                    result: result.toFixed(0),
                };
            } catch (e) {
                return {
                    ...state,
                    error: e.message,
                };
            }

        default:
            return state;
    }
};

const store = createStore(calculatorReducer);