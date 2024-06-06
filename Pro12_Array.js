var matrix1 = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
 
var matrix2 = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

function AddMatrices(matrix1,matrix2){
    var result = [];
    for(var i=0; i<matrix1.length; i++){
        var row = [];
        for(var j=0;j<matrix2.length;j++){
            var sum = matrix1[i][j] + matrix2[i][j];
            row.push(sum);
        }
        result.push(row);
    }
    return result;
}


var ResultMatrix = AddMatrices(matrix1,matrix2);

console.log("Printing result matrix : ");
for(var i=0;i<ResultMatrix.length;i++){
        console.log(ResultMatrix[i]);
}


