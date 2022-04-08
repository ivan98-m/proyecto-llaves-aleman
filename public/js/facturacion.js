const formDetalle = document.getElementById("formDetalle");
const formCabecera= document.getElementById("formCabecera");

const inputCantidad = document.getElementById("inputCantidad");
const inputDescripcion = document.getElementById("inputDescripcion");
const inputUnitario = document.getElementById("inputUnitario");
const inputTotal = document.getElementById("inputTotal");
const cuerpoTabla= document.getElementById("cuerpoTabla");
const btnGuardar= document.getElementById("btnGuardar");

const inputNombre = document.getElementById("inputNombre");
const inputCc = document.getElementById("inputCc");
const inputTelefono = document.getElementById("inputTelefono");
const inputDireccion = document.getElementById("inputDireccion");
const inputfecha = document.getElementById("inputfecha");



let facturas=[];
let arregloDetalle = [];

const verificarFactura=()=>{
    const facturasLs= JSON.parse(localStorage.getItem("facturas"));
    if (facturasLs){
        facturas = facturasLs;      
    }
    
};
verificarFactura();
const redibujarTabla = () => {
    cuerpoTabla.innerHTML= " ";
    
    arregloDetalle.forEach((detalle) => {
            
            let fila = document.createElement("tr");

            fila.innerHTML = `<td>${detalle.cant}</td>
                          <td>${detalle.descripcion}</td>
                          <td>${detalle.pUnit}</td>
                          <td>${detalle.pTotal}</td> `;


            let tdEliminar = document.createElement("td");
            let botonEliminar = document.createElement("button");
            botonEliminar.classList.add("btn", "btn-danger");
            botonEliminar.innerText = "Eliminar";
            botonEliminar.onclick = () => {
                eliminarDetalle(detalle.descripcion);
            };
            tdEliminar.appendChild(botonEliminar);
            fila.appendChild(tdEliminar);
            cuerpoTabla.appendChild(fila);
        });
};
const eliminarDetalle = (deta)=>{
    arregloDetalle = arregloDetalle.filter((detalle)=>{
        if(deta !== detalle.descripcion){
             return detalle;   
        }
    });
    redibujarTabla();
}

const agregarDetalle = (objDetalle) => {
    //busca si el detalle existe
    //suma las cantidades del detalle
    console.log("objetodetaller",objDetalle);
   
    const resultado = arregloDetalle.find((detalle) => {
        console.log("--- detalle" , detalle );
        if(objDetalle.descripcion === detalle.descripcion){
         
            return detalle;

        }
    });
    detalle = resultado;
    console.log("copia detalle",detalle)
    if (resultado){
        console.log("entro",detalle);
         
         //arregloDetalle.map = arregloDetalle = ((detalle) => {

            console.log("paso arreglodetalle");
            if (detalle.descripcion === objDetalle.descripcion) {
                console.log("paso");
                return {
                    cant: detalle.cant + objDetalle.cant,
                    descripcion: detalle.descripcion,
                    pUnit: detalle.pUnit,
                    pTotal: (detalle.cant + objDetalle.cant) * detalle.pUnit,
                };
            }

            return detalle;
       // });
        
    }else{
        arregloDetalle.push(objDetalle);
    }


}
formDetalle.onsubmit = (e) => {
    e.preventDefault();
    // creando detalle
    const objDetalle = {
        cant: inputCantidad.value,
        descripcion: inputDescripcion.value,
        pUnit: inputUnitario.value,
        pTotal: inputTotal.value,

    };
       
    agregarDetalle(objDetalle);
    redibujarTabla();
   
};

btnGuardar.onclick = ()  =>{
    //cabecera de la factura
    let objFactura ={
        nombre: inputNombre.value,
        cc: inputCc.value,
        telefono: inputTelefono.value,
        direccion: inputDireccion.value,
        fecha: inputfecha.value,
        detalle: arregloDetalle,

    };
    facturas.push(objFactura);
    //limpiar cambios
    formCabecera.reset();
    formDetalle.reset();
    
    // guardar en localStorage
    localStorage.setItem("facturas", JSON.stringify(facturas));

}
const calcularTotal = () =>{
    const cantidad = inputCantidad.value;
    const pUnit = inputUnitario.value;
    const total = cantidad * pUnit;
    inputTotal.value = total; 
}
inputCantidad.onkeyup =()=>{
    calcularTotal();
}
inputCantidad.onchange =() =>{
    calcularTotal();
}
inputUnitario.onkeyup =()=>{
    calcularTotal();
}
inputUnitario.onchange =() =>{
    calcularTotal();
}