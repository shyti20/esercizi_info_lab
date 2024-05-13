namespace Esercizio34
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            Random rnd = new Random();
            int temp = (rnd.Next() % 6) + 35;

            timer1.Interval = 10000;
            timer1.Start();

        }
    }
}