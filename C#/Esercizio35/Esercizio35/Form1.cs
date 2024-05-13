using System.ComponentModel;

namespace Esercizio35
{
    public partial class Form1 : Form
    {
        private int giri;
        private int marciaTemp = 0;
        public Form1()
        {
            InitializeComponent();
            giri = 0;
        }

        private void buttonAvvia_Click(object sender, EventArgs e)
        {
            timer1.Start();
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            if (sender == timer1)
            {
                marciaTemp = trackBarMarce.Value;
                if (marciaTemp < trackBarMarce.Value)
                {
                    giri -= 1000;
                } else if (marciaTemp > trackBarMarce.Value)
                {
                    giri += 1000;
                }
                labelGiri.Text = giri.ToString();
            }
            
        }
    }
}