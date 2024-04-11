using System.Diagnostics;

namespace Esercizio28
{
    public partial class Form1 : Form
    {
        private string sesso;
        private string occhi;
        public Form1()
        {
            sesso = "";
            InitializeComponent();
        }

        private void buttonSubmit_Click(object sender, EventArgs e)
        {
            string nameSurname = "Nome e Cognome: " + this.textBoxName.Text;
            string altezza = "Altezza" + this.textBoxAltezza.Text;
            string peso = "Peso: " + this.textBoxPeso.Text;
            string capacita = "Capacita altetiche: " + this.textBoxCapacita.Text;

            try
            {
                using (StreamWriter sw = new StreamWriter("log.txt"))
                {
                    sw.WriteLine(nameSurname);
                    sw.WriteLine(altezza);
                    sw.WriteLine(peso);
                    sw.WriteLine(capacita);
                    sw.WriteLine(sesso);
                    sw.WriteLine(occhi);
                    sw.Close();
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Errore: " + ex.Message);
            }



        }

        private void labelAltezza_Click(object sender, EventArgs e)
        {

        }

        private void sessoChecked(object sender, EventArgs e)
        {
            sesso = "Sesso: ";
            RadioButton rb = (RadioButton)sender;
            sesso += " " + rb.Text;
        }

        private void occhioChecked(object sender, EventArgs e)
        {
            occhi = "Occhi: ";
            RadioButton rb2 = (RadioButton)sender;
            occhi += " " + rb2.Text;
        }
    }
}