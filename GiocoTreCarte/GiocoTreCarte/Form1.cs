namespace GiocoTreCarte
{
    public partial class Form1 : Form
    {
        private Image[] arrayImage = new Image[2];
        private string[] arrayPath = new string[2];
        private int[] arrayPos = new int[3];

        public Form1()
        {
            InitializeComponent();

            arrayPath[0] = "carte/assoBastoni.png";
            arrayPath[1] = "carte/assoDenari.png";

            for (int i = 0; i < arrayPath.Length; i++)
            {
                arrayImage[i] = Image.FromFile(arrayPath[i]);
            }

            Random rd = new Random();
            arrayPos[0] = rd.Next(2);
            if (arrayPos[0] == 1)
            {
                arrayPos[1] = 0;
            }else
            {
                arrayPos[1] = rd.Next(2);
            }
            arrayPos[2] = (arrayPos[0] == 1 || arrayPos[1] == 1) ? 0 : 1;
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            buttonCarta1.BackgroundImage = Image.FromFile("carte/back.png");
            buttonCarta2.BackgroundImage = Image.FromFile("carte/back.png");
            buttonCarta3.BackgroundImage = Image.FromFile("carte/back.png");
        }

        private void sceltaClick(object sender, EventArgs e)
        {
            if (sender == buttonCarta1)
            {
                if (arrayPath[arrayPos[1]] == arrayPath[arrayPos[0]])
                {
                    MessageBox.Show("Hai perso!");
                }
                else if (arrayPath[arrayPos[2]] == arrayPath[arrayPos[0]])
                {
                    MessageBox.Show("Hai perso!");
                }
                else
                {
                    MessageBox.Show("Hai vinto!");
                }

            }
            else if (sender == buttonCarta2)
            {

                if (arrayPath[arrayPos[1]] == arrayPath[arrayPos[0]])
                {
                    MessageBox.Show("Hai perso!");
                }
                else if (arrayPath[arrayPos[2]] == arrayPath[arrayPos[1]])
                {
                    MessageBox.Show("Hai perso!");
                }
                else
                {
                    MessageBox.Show("Hai vinto!");
                }
            }
            else
            {
                if (arrayPath[arrayPos[2]] == arrayPath[arrayPos[0]])
                {
                    MessageBox.Show("Hai perso!");
                }
                else if (arrayPath[arrayPos[2]] == arrayPath[arrayPos[1]])
                {
                    MessageBox.Show("Hai perso!");
                }
                else
                {
                    MessageBox.Show("Hai vinto!");
                }
            }

            buttonCarta1.BackgroundImage = Image.FromFile(arrayPath[arrayPos[0]]);
            buttonCarta2.BackgroundImage = Image.FromFile(arrayPath[arrayPos[1]]);
            buttonCarta3.BackgroundImage = Image.FromFile(arrayPath[arrayPos[2]]);
        }

        private void buttonRigioca_Click(object sender, EventArgs e)
        {
            buttonCarta1.BackgroundImage = Image.FromFile("carte/back.png");
            buttonCarta2.BackgroundImage = Image.FromFile("carte/back.png");
            buttonCarta3.BackgroundImage = Image.FromFile("carte/back.png");
            Random rd = new Random();
            arrayPos[0] = rd.Next(2);
            if (arrayPos[0] == 1)
            {
                arrayPos[1] = 0;
            }
            else
            {
                arrayPos[1] = rd.Next(2);
            }
            arrayPos[2] = (arrayPos[0] == 1 || arrayPos[1] == 1) ? 0 : 1;
        }
    }
}