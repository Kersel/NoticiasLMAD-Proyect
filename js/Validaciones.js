/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function ValidarRegistro()
{
    if ($('#name').val() === '' || $('#name').val().trim() === '' || $('#name').val().trim().length<3)
    {
       alert('Favor de Llenar el campo Nombre (minimo 3 letras)');
        $('#name').focus();
        return false;
    }
    else{
        $('#name').val($('#name').val().trim());
    }
    if ($('#apellido').val() === '' || $('#apellido').val().trim() === '')
    {
        alert('Favor de Llenar el campo Apellido Paterno');
        $('#apellido').focus();
        return false;
    }else{
        $('#apellido').val($('#apellido').val().trim());
    }
    if ($('#email').val() === '' || $('#email').val().trim() === '')
    {
        alert('Favor de Llenar el campo Email');
        $('#email').focus();
        return false;
    }else{
        $('#email').val($('#email').val().trim());
    }
    if ($('#pass').val() === '' || $('#pass').val().trim() === '')
    {
        alert('Favor de Llenar el campo Password');
        $('#pass').focus();
        return false;
    }
}
