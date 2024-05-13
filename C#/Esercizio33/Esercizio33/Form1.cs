using System.Diagnostics;

namespace Esercizio33
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void trackBarTemperatura_Scroll(object sender, EventArgs e)
        {

        }

        private void cambioValuta(object sender, EventArgs e)
        {
            if (sender == trackBarTemperatura)
            {
                numericUpDownTemp.Value = trackBarTemperatura.Value;

            }
            else
            {
                trackBarTemperatura.Value = (int)numericUpDownTemp.Value;

            }

            if (sender == trackBarTempo)
            {
                numericUpDownTempo.Value = trackBarTempo.Value;
            }
            else
            {
                trackBarTempo.Value = (int)numericUpDownTempo.Value;
            }

        }

        private void buttonAvvia_Click(object sender, EventArgs e)
        {
            timer.Interval = 1000;
            timer.Start();
            label1.Visible = true;
            label1.Text = "Acceso";
        }

        private void timer_Tick(object sender, EventArgs e)
        {
            if (numericUpDownTempo.Value > 1)
            {
                numericUpDownTempo.Value--;
            }
            else
            {
                numericUpDownTempo.Value = 0;
                timer.Stop();
                label1.Text = "Spento";
            }
        }
    }
}