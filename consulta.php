<form name="busqueda" action="post_consulta.php" method="post">
   <tr>
      <td> Torneo: </td>
      <td>
         <select name="torneo" Required>
            <option>       </option>
            <option value ="Pepito">Pepito</option>
            <option value="Us Open">US Open</option>
            <option value="Australian Open">Australia Open</option>
            <option value="Australian Open">Australia Open</option>
      </td>
         </select>
   </tr>

   <tr>
      <td> * A&ntilde;o: </td>
      <td>
         <select name="ano" Required>
            <option>       </option>
            <option value ="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
      </td>
         </select>
   </tr>
   
   <tr>
      <td></td>
      <td>
         <button type = "submit" value="submit"  name="submit">Buscar</button>
      </td>
   </tr>
</form>


