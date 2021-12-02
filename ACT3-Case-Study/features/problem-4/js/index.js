

const cartesianForm = $('#cartesian-form');
const cartesianResult = $('#result');

/**
 * @description - This function is used to check the quadrant of the given coordinates
 * @param {number} x - x coordinate
 * @param {number} y - y coordinate
 * @returns {string} - quadrant
 */
const checkQuadrant = (x, y) => {
    if (x > 0 && y > 0) {
        return 'Quadrant I';
    } else if (x < 0 && y > 0) {
        return 'Quadrant II';
    } else if (x < 0 && y < 0) {
        return 'Quadrant III';
    } else if (x > 0 && y < 0) {
        return 'Quadrant IV';
    } else {
        return "Origin";
    }
};


/**
 * 
 * @param {string} x 
 * @param {string} y 
 * @param {string} quadrant 
 * @returns {string}
 */
const renderResult = (x, y, quadrant) => {
    return `
        <span>(${x},${y}) is in ${quadrant}</span>
    `;
};

cartesianForm.on('submit', function (e) {
    e.preventDefault();
    const data = new FormData(this);
    const x = parseInt(data.get('x'));
    const y = parseInt(data.get('y'));

    const quadrant = checkQuadrant(x, y);
    cartesianResult.empty();
    cartesianResult.append(renderResult(x, y, quadrant));

});