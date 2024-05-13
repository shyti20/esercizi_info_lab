namespace Esercizio34
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
            components = new System.ComponentModel.Container();
            trackBarTemp = new TrackBar();
            timer1 = new System.Windows.Forms.Timer(components);
            labelTemp = new Label();
            ((System.ComponentModel.ISupportInitialize)trackBarTemp).BeginInit();
            SuspendLayout();
            // 
            // trackBarTemp
            // 
            trackBarTemp.Location = new Point(259, 221);
            trackBarTemp.Maximum = 41;
            trackBarTemp.Minimum = 35;
            trackBarTemp.Name = "trackBarTemp";
            trackBarTemp.Size = new Size(267, 45);
            trackBarTemp.TabIndex = 0;
            trackBarTemp.Value = 35;
            // 
            // labelTemp
            // 
            labelTemp.AutoSize = true;
            labelTemp.Location = new Point(350, 189);
            labelTemp.Name = "labelTemp";
            labelTemp.Size = new Size(73, 15);
            labelTemp.TabIndex = 1;
            labelTemp.Text = "Temperatura";
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(labelTemp);
            Controls.Add(trackBarTemp);
            Name = "Form1";
            Text = "Form1";
            Load += Form1_Load;
            ((System.ComponentModel.ISupportInitialize)trackBarTemp).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TrackBar trackBarTemp;
        private System.Windows.Forms.Timer timer1;
        private Label labelTemp;
    }
}