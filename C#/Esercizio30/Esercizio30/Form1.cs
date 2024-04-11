namespace Esercizio30
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void checked_All(object sender, EventArgs e)
        {
            if (sender != checkBoxAll)
            {
                if (checkBoxAsp.Checked && checkBoxMVC.Checked && checkBoxQuery.Checked && checkBoxWCF.Checked)
                {
                    checkBoxAll.Checked = true;
                }
                else
                {
                    checkBoxAll.Checked = false;
                }
            }
            else
            {
                if (checkBoxAll.Checked)
                {
                    checkBoxAsp.Checked = true;
                    checkBoxMVC.Checked = true;
                    checkBoxQuery.Checked = true;
                    checkBoxWCF.Checked = true;
                    checkBoxAsp.Checked = true;
                }
                else
                {
                    checkBoxAsp.Checked = false;
                    checkBoxMVC.Checked = false;
                    checkBoxQuery.Checked = false;
                    checkBoxWCF.Checked = false;
                }
            }
        }
    }
}