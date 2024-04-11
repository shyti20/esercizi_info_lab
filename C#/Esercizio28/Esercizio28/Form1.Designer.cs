namespace Esercizio28
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
            textBoxName = new TextBox();
            labelSesso = new Label();
            textBoxAltezza = new TextBox();
            textBoxPeso = new TextBox();
            textBoxCapacita = new TextBox();
            labelOcchi = new Label();
            radioButtonMan = new RadioButton();
            radioButtonWomen = new RadioButton();
            radioButtonNeri = new RadioButton();
            radioButtonCastani = new RadioButton();
            radioButtonVerdi = new RadioButton();
            radioButtonBlue = new RadioButton();
            radioButtonRossi = new RadioButton();
            radioButtonGrigi = new RadioButton();
            labelAltezza = new Label();
            labelPeso = new Label();
            label1 = new Label();
            buttonSubmit = new Button();
            groupBoxOcchi = new GroupBox();
            groupBoxSesso = new GroupBox();
            groupBoxOcchi.SuspendLayout();
            groupBoxSesso.SuspendLayout();
            SuspendLayout();
            // 
            // labelName
            // 
            labelName.AutoSize = true;
            labelName.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            labelName.Location = new Point(12, 27);
            labelName.Name = "labelName";
            labelName.Size = new Size(97, 19);
            labelName.TabIndex = 0;
            labelName.Text = "Nome e cognome";
            // 
            // textBoxName
            // 
            textBoxName.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            textBoxName.Location = new Point(12, 49);
            textBoxName.Name = "textBoxName";
            textBoxName.Size = new Size(283, 27);
            textBoxName.TabIndex = 1;
            // 
            // labelSesso
            // 
            labelSesso.AutoSize = true;
            labelSesso.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            labelSesso.Location = new Point(12, 92);
            labelSesso.Name = "labelSesso";
            labelSesso.Size = new Size(40, 19);
            labelSesso.TabIndex = 3;
            labelSesso.Text = "Sesso";
            // 
            // textBoxAltezza
            // 
            textBoxAltezza.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            textBoxAltezza.Location = new Point(12, 207);
            textBoxAltezza.Name = "textBoxAltezza";
            textBoxAltezza.Size = new Size(121, 27);
            textBoxAltezza.TabIndex = 5;
            // 
            // textBoxPeso
            // 
            textBoxPeso.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            textBoxPeso.Location = new Point(195, 207);
            textBoxPeso.Name = "textBoxPeso";
            textBoxPeso.Size = new Size(100, 27);
            textBoxPeso.TabIndex = 6;
            // 
            // textBoxCapacita
            // 
            textBoxCapacita.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            textBoxCapacita.Location = new Point(12, 288);
            textBoxCapacita.Multiline = true;
            textBoxCapacita.Name = "textBoxCapacita";
            textBoxCapacita.Size = new Size(283, 150);
            textBoxCapacita.TabIndex = 7;
            // 
            // labelOcchi
            // 
            labelOcchi.AutoSize = true;
            labelOcchi.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            labelOcchi.Location = new Point(350, 27);
            labelOcchi.Name = "labelOcchi";
            labelOcchi.Size = new Size(74, 19);
            labelOcchi.TabIndex = 8;
            labelOcchi.Text = "Colore occhi";
            // 
            // radioButtonMan
            // 
            radioButtonMan.AutoSize = true;
            radioButtonMan.Font = new Font("Bahnschrift Light Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            radioButtonMan.Location = new Point(6, 12);
            radioButtonMan.Name = "radioButtonMan";
            radioButtonMan.Size = new Size(71, 23);
            radioButtonMan.TabIndex = 9;
            radioButtonMan.TabStop = true;
            radioButtonMan.Text = "Maschio";
            radioButtonMan.UseVisualStyleBackColor = true;
            radioButtonMan.CheckedChanged += sessoChecked;
            // 
            // radioButtonWomen
            // 
            radioButtonWomen.AutoSize = true;
            radioButtonWomen.Font = new Font("Bahnschrift Light Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            radioButtonWomen.Location = new Point(1, 41);
            radioButtonWomen.Name = "radioButtonWomen";
            radioButtonWomen.Size = new Size(76, 23);
            radioButtonWomen.TabIndex = 10;
            radioButtonWomen.TabStop = true;
            radioButtonWomen.Text = "Femmina";
            radioButtonWomen.UseVisualStyleBackColor = true;
            radioButtonWomen.CheckedChanged += sessoChecked;
            // 
            // radioButtonNeri
            // 
            radioButtonNeri.AutoSize = true;
            radioButtonNeri.Font = new Font("Bahnschrift Light Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            radioButtonNeri.Location = new Point(19, 18);
            radioButtonNeri.Name = "radioButtonNeri";
            radioButtonNeri.Size = new Size(48, 23);
            radioButtonNeri.TabIndex = 11;
            radioButtonNeri.TabStop = true;
            radioButtonNeri.Text = "Neri";
            radioButtonNeri.UseVisualStyleBackColor = true;
            radioButtonNeri.CheckedChanged += occhioChecked;
            // 
            // radioButtonCastani
            // 
            radioButtonCastani.AutoSize = true;
            radioButtonCastani.Font = new Font("Bahnschrift Light Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            radioButtonCastani.Location = new Point(19, 43);
            radioButtonCastani.Name = "radioButtonCastani";
            radioButtonCastani.Size = new Size(68, 23);
            radioButtonCastani.TabIndex = 12;
            radioButtonCastani.TabStop = true;
            radioButtonCastani.Text = "Castani";
            radioButtonCastani.UseVisualStyleBackColor = true;
            radioButtonCastani.CheckedChanged += occhioChecked;
            // 
            // radioButtonVerdi
            // 
            radioButtonVerdi.AutoSize = true;
            radioButtonVerdi.Font = new Font("Bahnschrift Light Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            radioButtonVerdi.Location = new Point(19, 68);
            radioButtonVerdi.Name = "radioButtonVerdi";
            radioButtonVerdi.Size = new Size(52, 23);
            radioButtonVerdi.TabIndex = 13;
            radioButtonVerdi.TabStop = true;
            radioButtonVerdi.Text = "Verdi";
            radioButtonVerdi.UseVisualStyleBackColor = true;
            radioButtonVerdi.CheckedChanged += occhioChecked;
            // 
            // radioButtonBlue
            // 
            radioButtonBlue.AutoSize = true;
            radioButtonBlue.Font = new Font("Bahnschrift Light Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            radioButtonBlue.Location = new Point(119, 22);
            radioButtonBlue.Name = "radioButtonBlue";
            radioButtonBlue.Size = new Size(51, 23);
            radioButtonBlue.TabIndex = 14;
            radioButtonBlue.TabStop = true;
            radioButtonBlue.Text = "Blue";
            radioButtonBlue.UseVisualStyleBackColor = true;
            radioButtonBlue.CheckedChanged += occhioChecked;
            // 
            // radioButtonRossi
            // 
            radioButtonRossi.AutoSize = true;
            radioButtonRossi.Font = new Font("Bahnschrift Light Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            radioButtonRossi.Location = new Point(119, 47);
            radioButtonRossi.Name = "radioButtonRossi";
            radioButtonRossi.Size = new Size(55, 23);
            radioButtonRossi.TabIndex = 15;
            radioButtonRossi.TabStop = true;
            radioButtonRossi.Text = "Rossi";
            radioButtonRossi.UseVisualStyleBackColor = true;
            radioButtonRossi.CheckedChanged += occhioChecked;
            // 
            // radioButtonGrigi
            // 
            radioButtonGrigi.AutoSize = true;
            radioButtonGrigi.Font = new Font("Bahnschrift Light Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            radioButtonGrigi.Location = new Point(119, 68);
            radioButtonGrigi.Name = "radioButtonGrigi";
            radioButtonGrigi.Size = new Size(51, 23);
            radioButtonGrigi.TabIndex = 16;
            radioButtonGrigi.TabStop = true;
            radioButtonGrigi.Text = "Grigi";
            radioButtonGrigi.UseVisualStyleBackColor = true;
            radioButtonGrigi.CheckedChanged += occhioChecked;
            // 
            // labelAltezza
            // 
            labelAltezza.AutoSize = true;
            labelAltezza.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            labelAltezza.Location = new Point(12, 185);
            labelAltezza.Name = "labelAltezza";
            labelAltezza.Size = new Size(49, 19);
            labelAltezza.TabIndex = 17;
            labelAltezza.Text = "Altezza";
            labelAltezza.Click += labelAltezza_Click;
            // 
            // labelPeso
            // 
            labelPeso.AutoSize = true;
            labelPeso.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            labelPeso.Location = new Point(195, 185);
            labelPeso.Name = "labelPeso";
            labelPeso.Size = new Size(33, 19);
            labelPeso.TabIndex = 18;
            labelPeso.Text = "Peso";
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Font = new Font("Bahnschrift Condensed", 12F, FontStyle.Regular, GraphicsUnit.Point);
            label1.Location = new Point(12, 266);
            label1.Name = "label1";
            label1.Size = new Size(106, 19);
            label1.TabIndex = 19;
            label1.Text = "Capacita atletiche";
            // 
            // buttonSubmit
            // 
            buttonSubmit.BackgroundImage = Properties.Resources.cricchetto;
            buttonSubmit.BackgroundImageLayout = ImageLayout.Stretch;
            buttonSubmit.FlatStyle = FlatStyle.Flat;
            buttonSubmit.Location = new Point(582, 266);
            buttonSubmit.Name = "buttonSubmit";
            buttonSubmit.Size = new Size(118, 55);
            buttonSubmit.TabIndex = 20;
            buttonSubmit.Text = "Submit";
            buttonSubmit.UseVisualStyleBackColor = true;
            buttonSubmit.Click += buttonSubmit_Click;
            // 
            // groupBoxOcchi
            // 
            groupBoxOcchi.Controls.Add(radioButtonNeri);
            groupBoxOcchi.Controls.Add(radioButtonCastani);
            groupBoxOcchi.Controls.Add(radioButtonVerdi);
            groupBoxOcchi.Controls.Add(radioButtonBlue);
            groupBoxOcchi.Controls.Add(radioButtonRossi);
            groupBoxOcchi.Controls.Add(radioButtonGrigi);
            groupBoxOcchi.Location = new Point(350, 49);
            groupBoxOcchi.Name = "groupBoxOcchi";
            groupBoxOcchi.Size = new Size(200, 100);
            groupBoxOcchi.TabIndex = 21;
            groupBoxOcchi.TabStop = false;
            // 
            // groupBoxSesso
            // 
            groupBoxSesso.Controls.Add(radioButtonWomen);
            groupBoxSesso.Controls.Add(radioButtonMan);
            groupBoxSesso.Location = new Point(12, 114);
            groupBoxSesso.Name = "groupBoxSesso";
            groupBoxSesso.Size = new Size(96, 76);
            groupBoxSesso.TabIndex = 22;
            groupBoxSesso.TabStop = false;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(groupBoxSesso);
            Controls.Add(groupBoxOcchi);
            Controls.Add(buttonSubmit);
            Controls.Add(label1);
            Controls.Add(labelPeso);
            Controls.Add(labelAltezza);
            Controls.Add(labelOcchi);
            Controls.Add(textBoxCapacita);
            Controls.Add(textBoxPeso);
            Controls.Add(textBoxAltezza);
            Controls.Add(labelSesso);
            Controls.Add(textBoxName);
            Controls.Add(labelName);
            Name = "Form1";
            Text = "Form1";
            groupBoxOcchi.ResumeLayout(false);
            groupBoxOcchi.PerformLayout();
            groupBoxSesso.ResumeLayout(false);
            groupBoxSesso.PerformLayout();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label labelName;
        private TextBox textBoxName;
        private Label labelSesso;
        private TextBox textBoxAltezza;
        private TextBox textBoxPeso;
        private TextBox textBoxCapacita;
        private Label labelOcchi;
        private RadioButton radioButtonMan;
        private RadioButton radioButtonWomen;
        private RadioButton radioButtonNeri;
        private RadioButton radioButtonCastani;
        private RadioButton radioButtonVerdi;
        private RadioButton radioButtonBlue;
        private RadioButton radioButtonRossi;
        private RadioButton radioButtonGrigi;
        private Label labelAltezza;
        private Label labelPeso;
        private Label label1;
        private Button buttonSubmit;
        private GroupBox groupBoxOcchi;
        private GroupBox groupBoxSesso;
    }
}