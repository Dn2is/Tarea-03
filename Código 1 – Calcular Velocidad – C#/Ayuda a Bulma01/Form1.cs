using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Ayuda_a_Bulma01
{
    public partial class Ejercicio01 : Form
    {

        public Ejercicio01()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void btnaceptar_Click(object sender, EventArgs e)
        {
            double total;
            double distancia;
            double tiempo;
            //string mensaje;
            distancia = Convert.ToInt32(txtdistancia.Text);
            tiempo = Convert.ToInt32(txttiempo.Text);
            
            total = distancia / tiempo;
        
            //mensaje = "La velocidad de la maquina del tiempo es: " + total + " km/h.";
            //txtresultado.Text = mensaje;
            MessageBox.Show("La velocidad de la maquina del tiempo es: " + total + " km/h.");
        }

        private void btnlimpiar_Click(object sender, EventArgs e)
        {
            txtdistancia.Text = "";
            txtresultado.Text = "";
            txttiempo.Text = "";
        }
    }
}
