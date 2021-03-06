<?php
/**
 * This file is part of TheWebMind 3rd generation.
 * 
 * @author Felipe Nascimento de Moura <felipenmoura@gmail.com>
 * @license licenses/mind3rd.license
 */

/**
 * Description of DBMS
 * Possible tags for markup:
 *   object
 *   element
 *   value
 *   property
 *   keyword
 *   comment
 * 
 * Possible tags for template's usage:
 *   defaultvalue
 *   propertyname
 *   propertytype
 *   propertysize
 *   propertydetails
 *   options
 *   tablename
 *   constraintname
 *   referencetablename
 *   referencecolumnname
 *   fkname
 *   propertiesnames
 *
 * @author Felipe Nascimento de Moura <felipenmoura@gmail.com>
 * @package DBMS
 */
interface DBMS {
	
	/**
	 * Returns the template to be used to set a default value to a column.
	 * @return string
	 */
	public function createDefault();
	
	/**
	 * Gets a template of how to create a table.
	 * The properties and primary keys will be treated by the system.
	 * 
	 * @return sting
	 */
	public function createTable();
	
	/**
	 * References another table straight from a column representation.
	 * NOTE: use this method with a TRUE in mustSort method, otherwise a refered table
	 * may no be created yet, and it will result in an error.
	 * If the currend DBMS allows you to alter the table and add a foreign key in another querym
	 * use the createFK method, and you may return false in the mustSort method(it will increase
	 * the performance). In this case, this method(createReferences) may return an empty string.
	 * 
	 * @return string
	 */
	public function createReferences();
	
	/**
	 * A template to create properties into a table.
	 * This template will be used to create each column into a table.
	 * 
	 * @return string
	 */
	public function property();
	
	/**
	 * Template to specify how to CHECK value in the database IF the DBMS supports it.
	 * If the DBMS does not support it, just return an empty string.
	 * 
	 * @return string
	 */
	public function createOptionsCheck();
	
	/**
	 * The not null keyword.
	 * 
	 * @return string
	 */
	public function notNullDefinition();
	
	/**
	 * The autoincremental properties type.
	 * In some DBMSs, the auto increment column has a different type(as serial, in postgres),
	 * for those, return here the respective type, otherwise, return "int".
	 * 
	 * @return string
	 */
	public function autoIncrementType();
	
	/**
	 * Returns the unique keyword.
	 * 
	 * @return string
	 */
	public function createUnique();
	
	/**
	 * Returns a header for the SQL file.
	 * You can use it to set an author, data/time, links, license or anything that might
	 * be useful.
	 * Please, do NOT remove the "Generated by theWebMind project(mind3rd release)" message.
	 * 
	 * @return string 
	 */
	public function getHeader();
	
	/**
	 * Template for altering a table, setting a foreign key.
	 * 
	 * @return string
	 */
	public function createFK();
	
	/**
	 * Returns a template specifying how specify a primary key for a table.
	 * 
	 * @return string
	 */
	public function createPrimaryKeys();
	
	/**
	 * Returns a teplate to alter a table, setting a new Primary Key.
	 * @return string
	 */
	public function createPK();
	
	/**
	 * Template to set a column as auto_increment.
	 * If the DBMS does not have a different type of datafor autoincremental columns,
	 * you may set here the keyword to do so, such as "AUTO_INCREMENT"
	 * 
	 * @return string
	 */
	public function createAutoIncrement();

	/**
	 * Sort the tables.
	 * If true is returned, the system will run an algorythm to sort the tables
	 * in order to allow the references to work. In these cases, the performance MAY
	 * be lower, so, if the DBMS supports an ALTER TABLE command to add a foreign 
	 * key in another moment, you should use that.
	 * 
	 * @return boolean
	 */	
	public function mustSort();
	
	/**
	 * Method which will return the required string.
	 * This method is generic and may be kept just as it is. Although, if
	 * you may change anything here, just be sure to return the templates
	 * as a pattern.
	 * The recomendation for this method would be like this:
	 * if(method_exists($this, $keyword))
	 *    return $this->$keyword();
	 * return false;
	 * 
	 * @param string $keyword
	 * @return string/boolean
	 */
	public function getModel($keyword);
}