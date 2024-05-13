namespace Esercizio32
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            labelName = new Label();
            textBoxNome = new TextBox();
            groupBoxRegioni = new GroupBox();
            groupBoxProvince = new GroupBox();
            groupBoxComuni = new GroupBox();
            comboBoxRegione = new ComboBox();
            comboBoxProvince = new ComboBox();
            comboBoxComuni = new ComboBox();
            buttonSend = new Button();
            groupBoxRegioni.SuspendLayout();
            groupBoxProvince.SuspendLayout();
            groupBoxComuni.SuspendLayout();
            SuspendLayout();
            // 
            // labelName
            // 
            labelName.AutoSize = true;
            labelName.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            labelName.Location = new Point(35, 56);
            labelName.Name = "labelName";
            labelName.Size = new Size(92, 19);
            labelName.TabIndex = 0;
            labelName.Text = "Nome Cognome:";
            // 
            // textBoxNome
            // 
            textBoxNome.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            textBoxNome.Location = new Point(35, 78);
            textBoxNome.Name = "textBoxNome";
            textBoxNome.Size = new Size(118, 27);
            textBoxNome.TabIndex = 1;
            // 
            // groupBoxRegioni
            // 
            groupBoxRegioni.Controls.Add(comboBoxRegione);
            groupBoxRegioni.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            groupBoxRegioni.Location = new Point(35, 194);
            groupBoxRegioni.Name = "groupBoxRegioni";
            groupBoxRegioni.Size = new Size(200, 100);
            groupBoxRegioni.TabIndex = 2;
            groupBoxRegioni.TabStop = false;
            groupBoxRegioni.Text = "Regione: ";
            // 
            // groupBoxProvince
            // 
            groupBoxProvince.Controls.Add(comboBoxProvince);
            groupBoxProvince.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            groupBoxProvince.Location = new Point(279, 194);
            groupBoxProvince.Name = "groupBoxProvince";
            groupBoxProvince.Size = new Size(200, 100);
            groupBoxProvince.TabIndex = 3;
            groupBoxProvince.TabStop = false;
            groupBoxProvince.Text = "Province: ";
            // 
            // groupBoxComuni
            // 
            groupBoxComuni.Controls.Add(comboBoxComuni);
            groupBoxComuni.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            groupBoxComuni.Location = new Point(549, 194);
            groupBoxComuni.Name = "groupBoxComuni";
            groupBoxComuni.Size = new Size(200, 100);
            groupBoxComuni.TabIndex = 4;
            groupBoxComuni.TabStop = false;
            groupBoxComuni.Text = "Comuni:";
            // 
            // comboBoxRegione
            // 
            comboBoxRegione.FormattingEnabled = true;
            comboBoxRegione.Items.AddRange(new object[] { "Umbria", "Basilicata", "Molise" });
            comboBoxRegione.Location = new Point(37, 37);
            comboBoxRegione.Name = "comboBoxRegione";
            comboBoxRegione.Size = new Size(121, 27);
            comboBoxRegione.TabIndex = 0;
            // 
            // comboBoxProvince
            // 
            comboBoxProvince.FormattingEnabled = true;
            comboBoxProvince.Location = new Point(31, 46);
            comboBoxProvince.Name = "comboBoxProvince";
            comboBoxProvince.Size = new Size(121, 27);
            comboBoxProvince.TabIndex = 0;
            // 
            // comboBoxComuni
            // 
            comboBoxComuni.FormattingEnabled = true;
            comboBoxComuni.Location = new Point(36, 46);
            comboBoxComuni.Name = "comboBoxComuni";
            comboBoxComuni.Size = new Size(121, 27);
            comboBoxComuni.TabIndex = 0;
            // 
            // buttonSend
            // 
            buttonSend.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            buttonSend.Location = new Point(341, 355);
            buttonSend.Name = "buttonSend";
            buttonSend.Size = new Size(90, 54);
            buttonSend.TabIndex = 5;
            buttonSend.Text = "Send";
            buttonSend.UseVisualStyleBackColor = true;
            buttonSend.Click += buttonSend_Click;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(buttonSend);
            Controls.Add(groupBoxComuni);
            Controls.Add(groupBoxProvince);
            Controls.Add(groupBoxRegioni);
            Controls.Add(textBoxNome);
            Controls.Add(labelName);
            Name = "Form1";
            Text = "Form1";
            groupBoxRegioni.ResumeLayout(false);
            groupBoxProvince.ResumeLayout(false);
            groupBoxComuni.ResumeLayout(false);
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label labelName;
        private TextBox textBoxNome;
        private GroupBox groupBoxRegioni;
        private GroupBox groupBoxProvince;
        private GroupBox groupBoxComuni;
        private ComboBox comboBoxRegione;
        private ComboBox comboBoxProvince;
        private ComboBox comboBoxComuni;
        private Button buttonSend;
    }
}