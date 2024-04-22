var carro = [];
var spTotal = document.getElementById("total");
var listaCarro = document.getElementById("carrito");
var cantidad = [];
productos();

function productos(){
    var objProducto = {
        id : 1,
        nombre: "Producto 1",
        precio: 300.00,
        cantidad: 0,
        descripcion: "",
        talla : ''
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 2,
        nombre: "Producto 2",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 3,
        nombre: "Producto 3",
        precio: 400.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 4,
        nombre: "Producto 4",
        precio: 420.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 5,
        nombre: "Producto 5",
        precio: 460.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 6,
        nombre: "Producto 6",
        precio: 400.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 7,
        nombre: "Producto 7",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 8,
        nombre: "Producto 8",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 9,
        nombre: "Producto 9",
        precio: 79.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 10,
        nombre: "Producto 10",
        precio: 89.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 11,
        nombre: "Producto 11",
        precio: 119.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 12,
        nombre: "Producto 12",
        precio: 119.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 13,
        nombre: "Producto 13",
        precio: 50.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 14,
        nombre: "Producto 14",
        precio: 50.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 15,
        nombre: "Producto 15",
        precio: 50.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 16,
        nombre: "Producto 16",
        precio: 50.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 17,
        nombre: "Producto 17",
        precio: 50.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 18,
        nombre: "Producto 18",
        precio: 50.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 19,
        nombre: "Producto 19",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 20,
        nombre: "Producto 20",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 21,
        nombre: "Producto 21",
        precio: 600.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 22,
        nombre: "Producto 23",
        precio: 350.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 24,
        nombre: "Producto 24",
        precio: 400.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 25,
        nombre: "Producto 25",
        precio: 580.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 26,
        nombre: "Producto 26",
        precio: 220.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 27,
        nombre: "Producto 27",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 28,
        nombre: "Producto 28",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 29,
        nombre: "Producto 29",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 30,
        nombre: "Producto 30",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 31,
        nombre: "Producto 31",
        precio: 500.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 32,
        nombre: "Producto 32",
        precio: 800.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 33,
        nombre: "Producto 33",
        precio: 300.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 34,
        nombre: "Producto 34",
        precio: 340.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 35,
        nombre: "Producto 35",
        precio: 400.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 36,
        nombre: "Producto 36",
        precio: 600.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 37,
        nombre: "Producto 37",
        precio: 561.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 38,
        nombre: "Producto 38",
        precio: 568.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 39,
        nombre: "Producto 39",
        precio: 435.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 40,
        nombre: "Producto 40",
        precio: 240.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 41,
        nombre: "Producto 41",
        precio: 340.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 42,
        nombre: "Producto 42",
        precio: 230.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 43,
        nombre: "Producto 43",
        precio: 340.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 44,
        nombre: "Producto 44",
        precio: 200.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 45,
        nombre: "Producto 45",
        precio: 210.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 46,
        nombre: "Producto 46",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 47,
        nombre: "Producto 47",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 48,
        nombre: "Producto 48",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 49,
        nombre: "Producto 49",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 50,
        nombre: "Producto 50",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 51,
        nombre: "Producto 51",
        precio: 480.00,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 52,
        nombre: "Producto 52",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 53,
        nombre: "Producto 53",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 54,
        nombre: "Producto 54",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 55,
        nombre: "Producto 55",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 56,
        nombre: "Producto 56",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 57,
        nombre: "Producto 57",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 58,
        nombre: "Producto 58",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 59,
        nombre: "Producto 59",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 60,
        nombre: "Producto 60",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 61,
        nombre: "Producto 61",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 62,
        nombre: "Producto 62",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 63,
        nombre: "Producto 63",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 64,
        nombre: "Producto 64",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 65,
        nombre: "Producto 65",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 66,
        nombre: "Producto 66",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 67,
        nombre: "Producto 67",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 68,
        nombre: "Producto 68",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 69,
        nombre: "Producto 69",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 70,
        nombre: "Producto 70",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 71,
        nombre: "Producto 71",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 72,
        nombre: "Producto 72",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 73,
        nombre: "Producto 73",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 74,
        nombre: "Producto 74",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 75,
        nombre: "Producto 75",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 76,
        nombre: "Producto 76",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 77,
        nombre: "Producto 77",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 78,
        nombre: "Producto 78",
        precio: 99.99,
        cantidad: 0
    };
    cantidad.push(objProducto);
    var objProducto = {
        id : 79,
        nombre: "Producto 79",
        precio: 99.99,
        cantidad: 0
    };

    cantidad.push(objProducto);
    }

    function AgregarCarro1(){
        cantidad[0].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro2(){
        cantidad[1].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro3(){
        cantidad[2].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro4(){
        cantidad[3].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }

    function AgregarCarro5(){
        cantidad[4].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro6(){
        cantidad[5].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro7(){
        cantidad[6].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro8(){
        cantidad[7].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro9(){
        cantidad[8].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro10(){
        cantidad[9].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro11(){
        cantidad[10].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro12(){
        cantidad[11].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro13(){
        cantidad[12].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro14(){
        cantidad[13].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro15(){
        cantidad[14].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro16(){
        cantidad[15].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }

    function AgregarCarro17(){
        cantidad[16].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro18(){
        cantidad[17].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro19(){
        cantidad[18].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro20(){
        cantidad[19].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro21(){
        cantidad[20].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro22(){
        cantidad[21].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro23(){
        cantidad[22].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro24(){
        cantidad[23].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro25(){
        cantidad[24].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro26(){
        cantidad[25].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro27(){
        cantidad[26].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro28(){
        cantidad[27].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro29(){
        cantidad[28].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro30(){
        cantidad[29].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro31(){
        cantidad[30].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro32(){
        cantidad[31].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro33(){
        cantidad[32].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro34(){
        cantidad[33].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro35(){
        cantidad[34].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro36(){
        cantidad[35].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro37(){
        cantidad[36].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro38(){
        cantidad[37].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro39(){
        cantidad[38].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro40(){
        cantidad[39].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro41(){
        cantidad[40].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro42(){
        cantidad[41].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro43(){
        cantidad[42].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro44(){
        cantidad[43].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro45(){
        cantidad[44].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro46(){
        cantidad[45].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro47(){
        cantidad[46].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro48(){
        cantidad[47].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro49(){
        cantidad[48].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro50(){
        cantidad[49].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro51(){
        cantidad[50].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro52() {
        cantidad[51].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro53() {
        cantidad[52].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro54() {
        cantidad[53].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro55() {
        cantidad[54].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro56() {
        cantidad[55].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro57() {
        cantidad[56].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    function AgregarCarro58() {
        cantidad[57].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro59() {
        cantidad[58].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro60() {
        cantidad[59].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro61() {
        cantidad[60].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro62() {
        cantidad[61].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro63() {
        cantidad[62].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro64() {
        cantidad[63].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro65() {
        cantidad[64].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro66() {
        cantidad[65].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro67() {
        cantidad[66].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro68() {
        cantidad[67].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro69() {
        cantidad[68].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro70() {
        cantidad[69].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro71() {
        cantidad[70].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro72() {
        cantidad[71].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro73() {
        cantidad[72].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro74() {
        cantidad[73].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro75() {
        cantidad[74].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }
    
    function AgregarCarro76() {
        cantidad[75].cantidad++;
        calcularTotal();
        mostrarEnCarro();
    }


    function calcularTotal(){
        var elTotal = 0;
        for (var p of cantidad){
            elTotal += (p.precio*p.cantidad);
        }
        spTotal.textContent = elTotal;
    }
    
    function mostrarEnCarro(){
        listaCarro.textContent="";
    
        for(var objP of cantidad){
            if(objP.cantidad > 0){
                var nodoProductoEnCarro = document.createElement("li");
                nodoProductoEnCarro.classList.add("list-group-item", "text-right", "mx-2");
                nodoProductoEnCarro.textContent = objP.cantidad + " - " + objP.nombre + " -$" + objP.precio;
                listaCarro.appendChild(nodoProductoEnCarro);
            }
        }
    }
    
    
