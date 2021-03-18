import React from 'react'
import { makeStyles } from '@material-ui/core/styles';
import Paper from '@material-ui/core/Paper';
import Grid from '@material-ui/core/Grid';
import TextField from '@material-ui/core/TextField';
import FormControl from '@material-ui/core/FormControl';
import Button from '@material-ui/core/Button';
import SaveIcon from '@material-ui/icons/Save';
import Box from '@material-ui/core/Box';
const useStyles = makeStyles((theme) => ({
    root: {
      flexGrow: 1,
    },
    paper: {
      padding: theme.spacing(2),
      textAlign: 'center',
      color: theme.palette.text.secondary,
    },
    mSpace: {
        '& > *': {
          margin: theme.spacing(1),
          width: '90ch',
        },
      },
      button: {
        margin: theme.spacing(1),
      },
  }));
const AddUser = () => {
    const classes = useStyles();
    return (
        <div className={classes.root}>
        <Grid container spacing={3}>
          <Grid item xs={12}>
            <Paper className={classes.paper}>
            <form className={classes.mSpace} noValidate autoComplete="off">
                <FormControl fullWidth="ture" variant="outlined">
                     <TextField id="outlined-basic" label="Name"  />
                </FormControl>
                <FormControl fullWidth="ture" variant="outlined">
                     <TextField id="outlined-basic" label="Introduction"  />
                </FormControl>
                <FormControl fullWidth="ture" variant="outlined">
                     <TextField id="outlined-basic" label="Location"  />
                </FormControl>
                <FormControl fullWidth="ture" variant="outlined">
                     <TextField id="outlined-basic" label="Cost"  />
                </FormControl>
                <Box mx={3}>
                    <Button
                        variant="contained"
                        color="primary"
                        size="large"
                        className={classes.button}
                        startIcon={<SaveIcon />}
                    >
                        Save
                    </Button>
                </Box> 
               
            </form>
            </Paper>
          </Grid>
        </Grid>
      </div>
    ) 

}
export default AddUser