import React, {useEffect, useState} from 'react'
import {Link} from 'react-router-dom'
import { makeStyles } from '@material-ui/core/styles';
import Table from '@material-ui/core/Table';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableContainer from '@material-ui/core/TableContainer';
import TableHead from '@material-ui/core/TableHead';
import TableRow from '@material-ui/core/TableRow';
import Paper from '@material-ui/core/Paper';
const useStyles = makeStyles({
    table: {
      minWidth: 650,
    },
  }); 
const Index = () => {
    const classes = useStyles();
    const [dataArrays, setDataArray] = useState([]);
    useEffect(() => {
        fetch('http://127.0.0.1:8000/test')
            .then(res => res.json())
            .then(json => setDataArray(json[('data')]));
      }, []);
    console.log(dataArrays, 'jays');
    return (
        <div className='container'>
         <div className="card">
         <h5 className="card-header">Laravel-React1232131</h5>
                <div className="card-body">
                <h5 className="card-title">Project Crud</h5>
            <p className="card-text">Author : Aljun Degamo</p>
                <Link to='/add' className='btn  btn-lg btn-primary'>Add</Link>
 
                        <TableContainer component={Paper}>
                        <Table className={classes.table} size="small" aria-label="a dense table">
                            <TableHead>
                            <TableRow>
                                <TableCell>Name </TableCell>
                                <TableCell align="right">introduction</TableCell>
                                <TableCell align="right">location</TableCell>
                                <TableCell align="right">cost</TableCell>
                            </TableRow>
                            </TableHead>
                            <TableBody>
                            {dataArrays.map((row, index) => (
                                <TableRow key={index.key}>
                                <TableCell component="th" scope="row">
                                    {row.name}
                                </TableCell>
                                <TableCell align="right">{row.introduction}</TableCell>
                                <TableCell align="right">{row.location}</TableCell>
                                <TableCell align="right">{row.cost}</TableCell>
                                </TableRow>
                            ))}
                            </TableBody>
                        </Table>
                        </TableContainer>
                
                </div>
            </div>
        </div>
    )
}

export default Index
